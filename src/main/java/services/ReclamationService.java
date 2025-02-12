package services;

import models.Reclamation;
import tools.MyDataBase;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ReclamationService implements IService<Reclamation> {
    private Connection cnx;

    public ReclamationService() {
        cnx = MyDataBase.getInstance().getCnx();
    }

    @Override
    public void ajouter(Reclamation r) throws SQLException {
        String sql = "INSERT INTO reclamation (userId, description, missionId, status, date, titre) VALUES (?, ?, ?, ?, ?, ?)";
        PreparedStatement st = cnx.prepareStatement(sql);
        st.setInt(1, r.getUserId());
        st.setString(2, r.getDescription());
        st.setInt(3, r.getMissionId());
        st.setString(4, r.getStatus());
        st.setDate(5, new java.sql.Date(r.getDate().getTime())); // Conversion java.util.Date → java.sql.Date
        st.setString(6, r.getTitre());  // Ajout du titre dans l'insertion
        st.executeUpdate();
        System.out.println("Réclamation ajoutée");
    }

    @Override
    public void supprimer(Reclamation r) throws SQLException {
        String sql = "DELETE FROM reclamation WHERE id = ?";
        PreparedStatement st = cnx.prepareStatement(sql);
        st.setInt(1, r.getId());
        st.executeUpdate();
        System.out.println("Réclamation supprimée");
    }

    @Override
    public void modifier(Reclamation reclamation, String nouveauTitre) throws SQLException {
        if (cnx == null || cnx.isClosed()) {
            throw new SQLException("La connexion à la base de données est fermée.");
        }

        // Désactiver l'auto-commit pour contrôler la transaction manuellement
        cnx.setAutoCommit(false);

        String checkQuery = "SELECT id FROM reclamation WHERE id = ?";
        PreparedStatement checkPs = cnx.prepareStatement(checkQuery);
        checkPs.setInt(1, reclamation.getId());
        ResultSet rs = checkPs.executeQuery();

        if (rs.next()) {
            // La réclamation existe, on peut procéder à la mise à jour
            String updateQuery = "UPDATE reclamation SET status = ?, description = ?, titre = ? WHERE id = ?";
            PreparedStatement ps = cnx.prepareStatement(updateQuery);
            ps.setString(1, reclamation.getStatus());  // Conserver le status actuel
            ps.setString(2, reclamation.getDescription());  // Conserver la description actuelle
            ps.setString(3, nouveauTitre);  // Mettre à jour le titre
            ps.setInt(4, reclamation.getId());

            int rowsUpdated = ps.executeUpdate();
            if (rowsUpdated > 0) {
                // Valider la transaction si la mise à jour a réussi
                cnx.commit();
                System.out.println("Réclamation mise à jour avec succès !");
            } else {
                // Si aucune ligne n'a été mise à jour (probablement à cause de l'ID)
                System.out.println("Aucune réclamation trouvée avec cet ID.");
            }
        } else {
            // Si la réclamation n'existe pas
            System.out.println("Réclamation avec cet ID non trouvée.");
        }

        // Rétablir l'auto-commit à true après la transaction
        cnx.setAutoCommit(true);
    }


    @Override
    public List<Reclamation> recuperer() throws SQLException {
        String sql = "SELECT * FROM reclamation";
        Statement st = cnx.createStatement();
        ResultSet rs = st.executeQuery(sql);
        List<Reclamation> reclamations = new ArrayList<>();
        while (rs.next()) {
            Reclamation r = new Reclamation();
            r.setId(rs.getInt("id"));
            r.setUserId(rs.getInt("userId"));
            r.setDescription(rs.getString("description"));
            r.setMissionId(rs.getInt("missionId"));
            r.setStatus(rs.getString("status"));
            r.setDate(rs.getDate("date"));
            r.setTitre(rs.getString("titre"));  // Récupération du titre
            reclamations.add(r);
        }
        return reclamations;
    }
}
