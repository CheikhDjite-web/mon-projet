<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include "index.php"
    ?>
</head>

<body>
    <!-- debut page ajout -->
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2>Ajouter un produit</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="produit.php" class="btn btn-secondary">← Retour à la liste</a>
            </div>
        </div>
        <!-- debut Formulaire -->
        <div class="container mt-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <strong>Formulaire d'ajout de produit</strong>
                </div>


                <div class="card-body">
                    <form>
                        <!-- Nom + Catégorie -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nom du produit *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Catégorie</label>
                                <input type="text" class="form-control" placeholder="Ex: Électronique, Vêtements, etc.">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Description du produit..."></textarea>
                        </div>

                        <!-- Prix + Quantité -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Prix (€) *</label>
                                <input type="number" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Quantité *</label>
                                <input type="number" class="form-control" value="0" required>
                            </div>
                        </div>

                        <!-- Bouton -->
                        <button type="submit" class="btn btn-primary">
                            Enregistrer le produit
                        </button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>