/*package controllers;

import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.collections.FXCollections;
import models.Reclamation;
import services.ReclamationService;
import javafx.stage.Stage;
import main.MainFX; // Importer MainFX pour ouvrir les fenêtres
import javafx.scene.control.ButtonType;
import java.sql.SQLException;
import models.User;
import models.Mission;

public class AfficherReclamationController {

    @FXML
    private ListView<Reclamation> reclamationListView;

    @FXML
    private Button ajouterButton, modifierButton, supprimerButton;

    private ReclamationService reclamationService = new ReclamationService();

    private User utilisateur; // Ajoutez un attribut pour l'utilisateur
    private Mission mission; // Ajoutez un attribut pour la mission

    @FXML
    public void initialize() {
        chargerReclamations();
    }

    // Méthode pour définir l'utilisateur
    public void setUser(User utilisateur) {
        this.utilisateur = utilisateur;
    }

    // Méthode pour définir la mission
    public void setMission(Mission mission) {
        this.mission = mission;
    }

    // Charger les réclamations depuis la base de données
    private void chargerReclamations() {
        try {
            reclamationListView.setItems(FXCollections.observableArrayList(reclamationService.recuperer()));
        } catch (SQLException e) {
            afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors du chargement des réclamations : " + e.getMessage());
        }
    }

    // Ouvrir la fenêtre d'ajout de réclamation
    @FXML
    public void ajouterReclamation() {
        try {
            MainFX.openAjouterReclamationWindow((Stage) ajouterButton.getScene().getWindow(), utilisateur, mission); // Passez l'utilisateur et la mission
            chargerReclamations(); // Rafraîchir après ajout
        } catch (Exception e) {
            afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de l'ajout de la réclamation : " + e.getMessage());
        }
    }

    // Ouvrir la fenêtre de modification d'une réclamation
    @FXML
    public void modifierReclamation() {
        Reclamation selectedReclamation = reclamationListView.getSelectionModel().getSelectedItem();
        if (selectedReclamation != null) {
            try {
                MainFX.openModifierReclamationWindow((Stage) modifierButton.getScene().getWindow(), selectedReclamation);
                chargerReclamations(); // Rafraîchir après modification
            } catch (Exception e) {
                afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de l'ouverture de la fenêtre de modification : " + e.getMessage());
            }
        } else {
            afficherAlerte(Alert.AlertType.WARNING, "Aucune sélection", "Veuillez sélectionner une réclamation à modifier.");
        }
    }

    // Supprimer une réclamation
    @FXML
    public void supprimerReclamation() {
        Reclamation selectedReclamation = reclamationListView.getSelectionModel().getSelectedItem();
        if (selectedReclamation != null) {
            Alert confirmation = new Alert(Alert.AlertType.CONFIRMATION);
            confirmation.setTitle("Confirmation de suppression");
            confirmation.setHeaderText(null);
            confirmation.setContentText("Êtes-vous sûr de vouloir supprimer cette réclamation ?");
            confirmation.showAndWait().ifPresent(response -> {
                if (response == ButtonType.OK) {
                    try {
                        reclamationService.supprimer(selectedReclamation);
                        chargerReclamations(); // Rafraîchir après suppression
                        afficherAlerte(Alert.AlertType.INFORMATION, "Succès", "Réclamation supprimée avec succès !");
                    } catch (SQLException e) {
                        afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de la suppression de la réclamation : " + e.getMessage());
                    }
                }
            });
        } else {
            afficherAlerte(Alert.AlertType.WARNING, "Aucune sélection", "Veuillez sélectionner une réclamation à supprimer.");
        }
    }

    // Afficher des alertes d'information ou d'erreur
    private void afficherAlerte(Alert.AlertType type, String titre, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(titre);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}*/

package controllers;

import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.VBox;
import models.Reclamation;
import models.User;
import models.Mission;
import services.ReclamationService;
import javafx.stage.Stage;
import javafx.scene.control.ButtonType;
import main.MainFX;

import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.List;

public class AfficherReclamationController {

    @FXML
    private GridPane reclamationGridPane;

    @FXML
    private Button ajouterButton;

    private ReclamationService reclamationService = new ReclamationService();
    private User utilisateur; // Utilisateur courant
    private Mission mission; // Mission courante

    @FXML
    public void initialize() {
        chargerReclamations();
    }

    public void setUser(User utilisateur) {
        this.utilisateur = utilisateur;
    }

    public void setMission(Mission mission) {
        this.mission = mission;
    }

    private void chargerReclamations() {
        try {
            reclamationGridPane.getChildren().clear(); // Effacer les anciennes cartes
            List<Reclamation> reclamations = reclamationService.recuperer();
            int row = 0;
            int col = 0;
            SimpleDateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");

            for (Reclamation reclamation : reclamations) {
                VBox card = new VBox();
                card.setStyle("-fx-padding: 10; -fx-background-color: white; -fx-border-radius: 5; -fx-effect: dropshadow(gaussian, rgba(0,0,0,0.3), 5, 0, 1, 1);");

                Label titreLabel = new Label("Titre : " + reclamation.getTitre());
                Label descriptionLabel = new Label("Description : " + reclamation.getDescription());
                Label statutLabel = new Label("Statut : " + reclamation.getStatus()); // ✅ Correction ici
                Label dateLabel = new Label("Date : " + (reclamation.getDate() != null ? dateFormat.format(reclamation.getDate()) : "Non définie")); // ✅ Correction ici
                Button modifierButton = new Button("Modifier");
                Button supprimerButton = new Button("Supprimer");

                modifierButton.setOnAction(e -> modifierReclamation(reclamation));
                supprimerButton.setOnAction(e -> supprimerReclamation(reclamation));

                card.getChildren().addAll(titreLabel, descriptionLabel, statutLabel, dateLabel, modifierButton, supprimerButton);
                reclamationGridPane.add(card, col, row);

                col++;
                if (col > 2) { // Passer à la ligne suivante après 3 cartes
                    col = 0;
                    row++;
                }
            }
        } catch (SQLException e) {
            afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors du chargement des réclamations : " + e.getMessage());
        }
    }

    @FXML
    public void ajouterReclamation() {
        try {
            MainFX.openAjouterReclamationWindow((Stage) ajouterButton.getScene().getWindow(), utilisateur, mission);
            chargerReclamations(); // Rafraîchir après ajout
        } catch (Exception e) {
            afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de l'ajout de la réclamation : " + e.getMessage());
        }
    }

    private void modifierReclamation(Reclamation reclamation) {
        try {
            MainFX.openModifierReclamationWindow((Stage) ajouterButton.getScene().getWindow(), reclamation, utilisateur, mission);
            chargerReclamations(); // Rafraîchir après modification
        } catch (Exception e) {
            afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de l'ouverture de la fenêtre de modification : " + e.getMessage());
        }
    }

    private void supprimerReclamation(Reclamation reclamation) {
        Alert confirmation = new Alert(Alert.AlertType.CONFIRMATION);
        confirmation.setTitle("Confirmation de suppression");
        confirmation.setHeaderText(null);
        confirmation.setContentText("Êtes-vous sûr de vouloir supprimer cette réclamation ?");
        confirmation.showAndWait().ifPresent(response -> {
            if (response == ButtonType.OK) {
                try {
                    reclamationService.supprimer(reclamation);
                    chargerReclamations(); // Rafraîchir après suppression
                    afficherAlerte(Alert.AlertType.INFORMATION, "Succès", "Réclamation supprimée avec succès !");
                } catch (SQLException e) {
                    afficherAlerte(Alert.AlertType.ERROR, "Erreur", "Erreur lors de la suppression de la réclamation : " + e.getMessage());
                }
            }
        });
    }

    private void afficherAlerte(Alert.AlertType type, String titre, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(titre);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}









