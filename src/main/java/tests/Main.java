package tests;

import models.Reclamation;
import services.ReclamationService;

import java.sql.SQLException;
import java.util.Date;

public class Main {
    public static void main(String[] args) {
        ReclamationService rs = new ReclamationService();

        try {
            // 1. Ajouter une réclamation
            System.out.println("Ajout d'une nouvelle réclamation...");
            Reclamation nouvelleReclamation = new Reclamation(1, "Problème de paiement", 6, "en_attente", new Date(), "Délai de paiement non respecté");

            rs.ajouter(nouvelleReclamation);
            System.out.println("Réclamation ajoutée avec succès !");
            // 2. Modifier une réclamation
            System.out.println("\nModification d'une réclamation...");
            // Assurez-vous que l'ID existe dans la base de données
            Reclamation reclamationExistante = rs.recuperer().stream()
                    .filter(r -> r.getId() == 4) // Cibler la réclamation avec l'ID 2
                    .findFirst()
                    .orElse(null);

            if (reclamationExistante != null) {
                // Modifier la description de la réclamation
                String nouvelleDescription = "Délai de paiement largement dépassé";
                rs.modifier(reclamationExistante, nouvelleDescription);
                System.out.println("Réclamation modifiée avec succès !");
            } else {
                System.out.println("Réclamation avec l'ID 1 non trouvée.");
            }
            // . Supprimer une réclamation
            System.out.println("\nSuppression de la réclamation...");
            // Cibler la réclamation avec un ID connu
            Reclamation reclamationASupprimer = rs.recuperer().stream()
                    .filter(r -> r.getId() == 5)  // Cibler la réclamation avec l'ID 2
                    .findFirst()
                    .orElse(null);

            if (reclamationASupprimer != null) {
                // Supprimer la réclamation
                rs.supprimer(reclamationASupprimer);
                System.out.println("Réclamation supprimée avec succès !");
            } else {
                System.out.println("Réclamation avec l'ID 2 non trouvée.");
            }

            // 3. Afficher les réclamations après suppression
            System.out.println("\nListe des réclamations après suppression :");
            rs.recuperer().forEach(System.out::println);


        } catch (SQLException e) {
            System.err.println("Erreur : " + e.getMessage());
        }
    }
}
