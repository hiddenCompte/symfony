package models;

import java.util.Date;

public class Reclamation {
    private int id;
    private int userId;
    private String description;
    private int missionId;
    private String status;
    private Date date;
    private String titre;  // Ajout du champ titre

    public Reclamation() {
    }

    // Constructeur avec le champ titre ajouté
    public Reclamation(int userId, String description, int missionId, String status, Date date, String titre) {
        this.userId = userId;
        this.description = description;
        this.missionId = missionId;
        this.status = status;
        this.date = date;
        this.titre = titre;
    }

    // Constructeur avec l'ID en plus
    public Reclamation(int id, int userId, String description, int missionId, String status, Date date, String titre) {
        this.id = id;
        this.userId = userId;
        this.description = description;
        this.missionId = missionId;
        this.status = status;
        this.date = date;
        this.titre = titre;
    }

    @Override
    public String toString() {
        return "Reclamation{" +
                "id=" + id +
                ", userId=" + userId +
                ", description='" + description + '\'' +
                ", missionId=" + missionId +
                ", status='" + status + '\'' +
                ", date=" + date +
                ", titre='" + titre + '\'' +
                '}';
    }

    // Getters et setters pour tous les champs
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getMissionId() {
        return missionId;
    }

    public void setMissionId(int missionId) {
        this.missionId = missionId;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }
}
