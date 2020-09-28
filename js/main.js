/**
 * @file Script contenant les fonctions de base
 * @author Jonathan Martel (jmartel@cmaisonneuve.qc.ca)
 * @version 0.1
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

//const BaseURL = "https://e1995654.webdev.cmaisonneuve.qc.ca/vino_etu/";
const BaseURL = document.baseURI;
//console.log(BaseURL);
window.addEventListener('load', function() {
    console.log("load");
    document.querySelectorAll(".btnBoire").forEach(function(element) {
        //console.log(element);
        element.addEventListener("click", function(evt) {
            let id_bouteille = evt.target.parentElement.dataset.id_bouteille;
            let id_cellier = evt.target.parentElement.dataset.id_cellier;
            let requete = new Request(BaseURL + "index.php?requete=boireBouteilleCellier", { method: 'POST', body: '{"id_bouteille": ' + id_bouteille + ', "id_cellier": ' + id_cellier + ' }' });
            console.log(requete);

            fetch(requete)
                .then(response => {
                    if (response.status === 200) {
                        return response.json();
                    } else {
                        throw new Error('Erreur');
                    }
                })
                .then(response => {
                    console.debug(response);
                    requete = new Request(BaseURL + "index.php?requete=consulterQuantiteBouteilleCellier&id_bouteille=" + id_bouteille + "&id_cellier=" + id_cellier, { method: 'GET' });
                    console.log(requete);
                    fetch(requete)
                        .then(response => {
                            if (response.status === 200) {
                                return response.json();
                            } else {
                                throw new Error('Erreur');
                            }
                        })
                        .then(response => {
                            console.debug(response);
                            let quantiteBoite = evt.target.parentElement.parentElement.getElementsByClassName('quantite')[0];
                            quantiteBoite.innerHTML = 'Quantité: ' + response.quantite;
                        }).catch(error => {
                            console.error(error);
                        });
                }).catch(error => {
                    console.error(error);
                });
        })

    });

    document.querySelectorAll(".btnAjouter").forEach(function(element) {
        //console.log(element);
        element.addEventListener("click", function(evt) {
            let id_bouteille = evt.target.parentElement.dataset.id_bouteille;
            let id_cellier = evt.target.parentElement.dataset.id_cellier;
            let requete = new Request(BaseURL + "index.php?requete=ajouterBouteilleCellier", { method: 'POST', body: '{"id_bouteille": ' + id_bouteille + ', "id_cellier": ' + id_cellier + ' }' });

            fetch(requete)
                .then(response => {
                    if (response.status === 200) {
                        return response.json();
                    } else {
                        throw new Error('Erreur');
                    }
                })
                .then(response => {
                    console.debug(response);
                    requete = new Request(BaseURL + "index.php?requete=consulterQuantiteBouteilleCellier&id_bouteille=" + id_bouteille + "&id_cellier=" + id_cellier, { method: 'GET' });
                    fetch(requete)
                        .then(response => {
                            if (response.status === 200) {
                                return response.json();
                            } else {
                                throw new Error('Erreur');
                            }
                        })
                        .then(response => {
                            console.debug(response);
                            let quantiteBoite = evt.target.parentElement.parentElement.getElementsByClassName('quantite')[0];
                            quantiteBoite.innerHTML = 'Quantité: ' + response.quantite;
                        }).catch(error => {
                            console.error(error);
                        });
                }).catch(error => {
                    console.error(error);
                });
        })
    });

    // la recherche d'une bouteille par son nom
    let inputNomBouteille = document.querySelector("[name='nom_bouteille']");
    //console.log(inputNomBouteille);
    let liste = document.querySelector('.listeAutoComplete');

    if (inputNomBouteille) {
        inputNomBouteille.addEventListener("keyup", function(evt) {
            console.log(evt);
            let nom = inputNomBouteille.value;
            liste.innerHTML = "";
            if (nom) {
                let requete = new Request(BaseURL + "index.php?requete=autocompleteBouteille", { method: 'POST', body: '{"nom": "' + nom + '"}' });
                fetch(requete)
                    .then(response => {
                        if (response.status === 200) {
                            return response.json();
                        } else {
                            throw new Error('Erreur');
                        }
                    })
                    .then(response => {
                        console.log(response);


                        response.forEach(function(element) {
                            liste.innerHTML += "<li data-id='" + element.id + "'>" + element.nom + "</li>";
                        })
                    }).catch(error => {
                        console.error(error);
                    });
            }

        });

        let bouteille = {
            cellier: document.getElementById('cellier'),
            nom: document.querySelector(".nom_bouteille"),
            millesime: document.querySelector("[name='millesime']"),
            quantite: document.querySelector("[name='quantite']"),
            date_achat: document.querySelector("[name='date_achat']"),
            prix: document.querySelector("[name='prix']"),
            garde_jusqua: document.querySelector("[name='garde_jusqua']"),
            notes: document.querySelector("[name='notes']"),
        };

        //choisir un nom d'une bouteile
        liste.addEventListener("click", function(evt) {
            //console.dir(evt.target)
            if (evt.target.tagName == "LI") {
                bouteille.nom.dataset.id = evt.target.dataset.id;
                bouteille.nom.innerHTML = evt.target.innerHTML;
                liste.innerHTML = "";
                inputNomBouteille.value = "";

            }
        });

        let btnAjouter = document.querySelector("[name='ajouterBouteilleCellier']");
        if (btnAjouter) {
            btnAjouter.addEventListener("click", function(evt) {

                let choice = bouteille.cellier.selectedIndex;
                let idCellier = bouteille.cellier.options[choice].value;
                let isvalid = true;

                if (!Number.isInteger(+bouteille.millesime.value) || !bouteille.millesime.value) {
                    let erreurMillesime = document.getElementById('erreurMil');
                    erreurMillesime.innerHTML = 'Millesime non valide, la valeur doit être un nombre entier';
                    isvalid = false;
                }

                if (!Number.isInteger(+bouteille.quantite.value) || !bouteille.quantite.value) {
                    let erreurQuantite = document.getElementById('erreurQuan');
                    erreurQuantite.innerHTML = 'Quantité non valide, la valeur doit être un nombre entier';
                    isvalid = false;
                }

                if (Number.isNaN(+bouteille.prix.value) || !bouteille.prix.value) {
                    let erreurPrix = document.getElementById('erreurPrix');
                    erreurPrix.innerHTML = 'Prix non valide, la valeur doit être un nombre entier ou décimal';
                    isvalid = false;
                }

                if (bouteille.garde_jusqua.value == "") {
                    let erreurGarde = document.getElementById('erreurGarde');
                    erreurGarde.innerHTML = 'Champ obligatoire (Garde jusqua), ne peut être vide';
                    isvalid = false;
                }

                if (bouteille.notes.value == "") {
                    let erreurNotes = document.getElementById('erreurNotes');
                    erreurNotes.innerHTML = 'Champ obligatoire (Notes), ne peut être vide';
                    isvalid = false;
                }

                if (isvalid) {
                    var param = {
                        "id_bouteille": bouteille.nom.dataset.id,
                        "id_cellier": idCellier,
                        "date_achat": bouteille.date_achat.value,
                        "garde_jusqua": bouteille.garde_jusqua.value,
                        "notes": bouteille.notes.value,
                        "prix": bouteille.prix.value,
                        "quantite": bouteille.quantite.value,
                        "millesime": bouteille.millesime.value,
                    };
                    let URLSansR = window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1);
                    let requete = new Request(URLSansR + "index.php?requete=ajouterNouvelleBouteilleCellier", { method: 'POST', body: JSON.stringify(param) });
                    //console.log(requete);
                    fetch(requete)
                        .then(response => {
                            if (response.status === 200) {
                                return response.json();
                            } else {
                                throw new Error('Erreur');
                            }
                        })
                        .then(response => {
                            console.log(response);
                            if (response == false) {
                                alert("La bouteille n'a pas été ajoutée, vérifiez que cette bouteille n'est pas déjà dans le cellier");
                            } else {
                                location.reload();
                                alert('Bouteille ajoutée au cellier avec succès');
                            }
                        }).catch(error => {
                            console.error(error);
                        });

                }
            });
        }
    }

    let bouteille = {
        cellier: document.getElementById('cellier'),
        pays: document.getElementById("pays"),
        type: document.getElementById("type")
    };
    //selectionner un cellier
    let selectCellier = document.querySelectorAll(".tri_cellier");
    selectCellier.forEach(function(elem) {
        elem.addEventListener("change", function(e) {
            e.preventDefault();
            e.stopPropagation();
            let choice = bouteille.cellier.selectedIndex; //selection cellier
            let idCellier = bouteille.cellier.options[choice].value; //valeur cellier choisi
            let paysChoisi = bouteille.pays.selectedIndex; //selection pays
            let paysOption = bouteille.pays.options[paysChoisi].value; //valeur pays choisi
            let typeChoisi = bouteille.type.selectedIndex; //type choisi
            let typeOption = bouteille.type.options[typeChoisi].value; //valeur type choisi
            //test des selects selectionnées pour les rediriger vers le bon resultat
            console.log('choice ', choice, ' paysChoisi ', paysChoisi, ' typeChoisi ', typeChoisi,
                ' idCellier ', idCellier, ' paysOption ', paysOption, ' typeOption ', typeOption)
            if (choice > 0 && paysChoisi > 0 && typeChoisi > 0) { //tous les param
                window.location = BaseURL + "index.php?requete=accueil&idCellier=" + idCellier + "&paysOption=" + paysOption + "&typeOption=" + typeOption;
            } else if (paysChoisi <= 0 && choice > 0 && typeChoisi > 0) { //le cellier + le type
                window.location = BaseURL + "index.php?requete=accueil&idCellier=" + idCellier + "&typeOption=" + typeOption;
            } else if (choice <= 0 && paysChoisi <= 0 && typeChoisi > 0) { //le type
                window.location = BaseURL + "index.php?requete=accueil&typeOption=" + typeOption;
            } else if (choice > 0 && paysChoisi <= 0 && typeChoisi <= 0) { //le cellier
                window.location = BaseURL + "index.php?requete=accueil&idCellier=" + idCellier;
            } else if (paysChoisi > 0 && typeChoisi <= 0 && choice <= 0) { //le pays
                window.location = BaseURL + "index.php?requete=accueil&paysOption=" + paysOption;
            } else if (paysChoisi > 0 && typeChoisi > 0 && choice <= 0) { //pays + type
                window.location = BaseURL + "index.php?requete=accueil&paysOption=" + paysOption + "&typeOption=" + typeOption;
            } else if (paysChoisi > 0 && typeChoisi <= 0 && choice > 0) { //pays + cellier
                window.location = BaseURL + "index.php?requete=accueil&paysOption=" + paysOption + "&idCellier=" + idCellier;
            } else if (paysChoisi <= 0 && typeChoisi <= 0 && choice <= 0) { //aucun parametres
                window.location = BaseURL + "index.php?requete=accueil";
            }

            let requete = new Request(BaseURL + "index.php?requete=");
            fetch(requete)
                .then(response => {
                    if (response.status === 200) {
                        console.log('resp', response);
                        return response.json().then((data) => console.log(data));
                    } else {
                        throw new Error('Erreur');
                    }
                }).catch(error => {
                    console.error(error);
                });
        });
    });
    //Fonctionnalités du boutton ajouter pour ajouter un nouveau cellier
    let inputAjouterCellier = document.querySelector("[name='nomCellier']");
    let buttonAjouterCellier = document.getElementById("buttonAjouterCellier");
    let URLSansR = window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1);

    if (inputAjouterCellier) {
        buttonAjouterCellier.addEventListener("click", function(evt) {
            var param = {
                "nom_cellier": inputAjouterCellier.value
            };
            let requete = new Request(URLSansR + "index.php?requete=ajouterNouveauCellier", { method: 'POST', body: JSON.stringify(param) });
            fetch(requete)
                .then(response => {
                    if (response.status === 200) {
                        location.reload();
                        alert('Cellier correctement créé');
                        return response.json();
                    } else {
                        throw new Error('Erreur');
                    }
                })
                .then(response => {
                    console.log(response);
                }).catch(error => {
                    console.error(error);
                });
        })
    }
    //Fonctionnalités pour modifier un cellier existant
    document.querySelectorAll("[name='modifierButton']").forEach(item => {
        item.addEventListener('click', event => {
            let x = document.getElementById("center_container"),
                y = document.getElementById('close_center');
            x.style.display === "none";
            var row = event.target.parentElement.parentElement.parentElement;
            var param = {
                "nom_cellier": row.getElementsByClassName('nomCellier')[0].value,
                "id_cellier": parseInt(row.getElementsByClassName('idCellier')[0].innerHTML)
            };
            let requete = new Request(URLSansR + "index.php?requete=actualiserCellier", { method: 'POST', body: JSON.stringify(param) });
            if (x.style.display === "none") {
                x.style.display = "block";
                fetch(requete)
                    .then(response => {
                        if (response.status === 200) {
                            y.addEventListener('click', function(e) {
                                location.reload();
                            })
                            return response.json();
                        } else {
                            throw new Error('Erreur');
                        }
                    })
                    .then(response => {
                        console.log(response);
                    }).catch(error => {
                        console.error(error);
                    });
            } else {
                x.style.display = "none";

            }

        });
    });
    //Fonctionnalités pour supprimer un cellier existant
    document.querySelectorAll("[name='suprimmerButton']").forEach(item => {
        item.addEventListener('click', event => {
            var choice = confirm('Êtes-vous sûr de vouloir supprimer ce cellier?');
            if (choice) {
                var row = event.target.parentElement.parentElement.parentElement;
                console.log(row);
                var param = {
                    "id_cellier": parseInt(row.getElementsByClassName('idCellier')[0].innerHTML)
                };
                let requete = new Request(URLSansR + "index.php?requete=supprimerCellier", { method: 'POST', body: JSON.stringify(param) });
                fetch(requete)
                    .then(response => {
                        if (response.status === 200) {
                            location.reload();
                            alert('Suppression du cellier effectuée');
                            return response.json();
                        } else {
                            //Refuser d'effacer le cellier parce qu'il y a des bouteilles dedans
                            alert("Le cellier n'a pas pu être effacé. Vérifier la présence de bouteilles dans le cellier");
                        }
                    })
                    .then(response => {
                        console.log(response);
                    }).catch(error => {
                        console.error(error);
                    });
            }
        });
    });
    //Modifier une bouteille dans le cellier
    document.querySelectorAll("[name='modifierBouteille']").forEach(item => {
        item.addEventListener('click', event => {
            let URLSansR = window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1);
            let id_bouteille = event.target.parentElement.dataset.id_bouteille;
            let id_cellier = event.target.parentElement.dataset.id_cellier;
            window.location = URLSansR + "index.php?requete=getInfosBouteille&id_bouteille=" + id_bouteille + "&id_cellier=" + id_cellier;
        });
    });

    let modifier_bouteille = document.querySelectorAll("[name='modifier_bouteille']")[0];

    if (modifier_bouteille) {
        modifier_bouteille.addEventListener("click", function(e) {
            let row = e.target.parentElement.parentElement;
            let isvalid = true;
            let bouteille = {
                cellier: document.getElementById('cellier'),
                nom: document.querySelector(".nom_bouteille"),
                millesime: document.querySelector("[name='millesime']"),
                quantite: document.querySelector("[name='quantite']"),
                date_achat: document.querySelector("[name='date_achat']"),
                prix: document.querySelector("[name='prix']"),
                garde_jusqua: document.querySelector("[name='garde_jusqua']"),
                notes: document.querySelector("[name='notes']"),
            };

            if (!Number.isInteger(+bouteille.quantite.value) || (bouteille.quantite.value == '')) {
                let erreurQuantite = document.getElementById('erreurQuan');
                erreurQuantite.innerHTML = 'Quantité non valide, la valeur doit être un nombre entier';
                isvalid = false;
            }

            if (Number.isNaN(+bouteille.prix.value) /* || bouteille.prix.value == ''*/ ) {
                let erreurPrix = document.getElementById('erreurPrix');
                erreurPrix.innerHTML = 'Prix non valide, la valeur doit être un nombre entier ou décimal';
                isvalid = false;
            }

            if (bouteille.garde_jusqua.value == "") {
                let erreurGarde = document.getElementById('erreurGarde');
                erreurGarde.innerHTML = 'Champ obligatoire (Garde jusqua), ne peut être vide';
                isvalid = false;
            }

            if (isvalid) {
                let param = {
                    "id_bouteille": parseInt(row.querySelectorAll("[name='bouteille_id']")[0].value),
                    "id_cellier": parseInt(row.querySelectorAll("[name='id_cellier']")[0].value),
                    "quantite": JSON.parse(row.querySelectorAll("[name='quantite']")[0].value),
                    "date_achat": row.querySelectorAll("[name='date_achat']")[0].value,
                    "millesime": JSON.parse(row.querySelectorAll("[name='millesime']")[0].value),
                    "garde_jusqua": JSON.parse(row.querySelectorAll("[name='garde_jusqua']")[0].value),
                    "notes": row.querySelectorAll("[name='notes']")[0].value,
                    "prix": JSON.parse(row.querySelectorAll("[name='prix']")[0].value)

                };

                let requete = new Request(URLSansR + "index.php?requete=modifierBouteille", { method: 'POST', body: JSON.stringify(param) });
                fetch(requete)
                    .then(response => {
                        if (response.status === 200) {
                            alert('Modification de la bouteille effectuée avec succès');
                            location.reload();
                            return response.json();
                        } else {
                            throw new Error('Erreur');
                        }
                    })
                    .then(response => {
                        console.log(response);
                        if (response == false) {
                            alert("La bouteille n'a pas été ajoutée, vérifiez que cette bouteille n'est pas déjà dans le cellier");
                        } else {
                            location.reload();
                            alert('Bouteille ajoutée au cellier avec succès');
                        }
                    }).catch(error => {
                        console.error(error);
                    });
            }
        })
    }

    let btnSupprUtil = document.getElementsByName("supprimerUtil");
    let btnModifUtil = document.getElementsByName("modifierUtil");

    //suppression d'un utilisateur
    btnSupprUtil.forEach(elem => {
        elem.parentElement.addEventListener('click', function(e) {

            let id_util = e.target.parentElement.nextElementSibling.value;
            let requete = new Request(BaseURL + "index.php?requete=supprimerUtilisateur", { method: 'DELETE', body: '{"id_util": ' + id_util + ' }' });

            fetch(requete)
                .then(response => {
                    if (response.status === 200) {
                        location.reload();
                        alert('Suppression de l\'utilisateur est effectuée');
                        return response.json();
                    } else {
                        //Refus de suppression de l'utilisateur parce qu'il y a des celliers qui lui sont associés
                        alert("L'utilsateur n'a pas pu être effacé. Vérifier la présence de celliers à son compte");
                    }
                })
                .then(response => {
                    console.debug(response);
                }).catch(error => {
                    console.error(error);
                });
        });
    });

    //Modification d'un utilisateur
    btnModifUtil.forEach(elem => {
        elem.parentElement.addEventListener('click', function(e) {
            console.log("modifier");
            let id_util = e.target.parentElement.nextElementSibling.value;
            console.log(id_util);
        });
    });
});