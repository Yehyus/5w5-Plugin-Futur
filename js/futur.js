(function () {
  // URL de l'API REST de WordPress
  let url = "http://localhost:8080/5w5/wp-json/wp/v2/posts?categories=25&per_page=30";

  let titre;

  // Effectuer la requête HTTP en utilisant fetch()
  fetch(url)
    .then(function (response) {
      // Vérifier si la réponse est OK (statut HTTP 200)
      if (!response.ok) {
        throw new Error(
          "La requête a échoué avec le statut " + response.status
        );
      }

      // Analyser la réponse JSON
      return response.json();
    })
    .then(function (data) {
      // La variable "data" contient la réponse JSON
      console.log("Variable data", data);

      // Maintenant, vous pouvez traiter les données comme vous le souhaitez
      // Par exemple, extraire les titres des articles comme dans l'exemple précédent
      data.forEach(function (article) {
        titre = article.title.rendered;
        console.log(titre);
        afficherFutur();
      
      });
    })
    .catch(function (error) {
      // Gérer les erreurs
      console.error("Erreur lors de la récupération des données :", error);
    });

    let divfutur1 = document.querySelector('.futur1');

    function afficherFutur() {
      let urlSession = "http://localhost:8080/5w5/wp-json/wp/v2/posts?categories=25&per_page=30";
     
      fetch(urlSession)
        .then(response => response.json())
        .then(data => {
          // Clear the articleContainer
          divfutur1.innerHTML = "";
   
          // Loop through the data and create article elements
          data.forEach(article => {
            const infoAte = document.createElement("div");
            infoAte.className = "article";
            infoAte.innerHTML = `
            <div class='animation-rectangle'>
              <div class='rectangle-deco1'></div>
              <div class='rectangle-deco2'></div>
              <div class='rectangle-deco3'></div>
              <div class='rectangle-deco4'></div>
              <div class='rectangle-deco5'></div>
            </div>
            <h2>${article.title.rendered}</h6>
            <p>${article.content.rendered}</p>
            <div class='animation-cube'>
              <div class='cube1'>
                  <div class='cube-deco1'></div>
                  <div class='cube-deco2'></div>
              </div>

              <div class='cube2'>
                  <div class='cube-deco3'></div>
                  <div class='cube-deco4'></div>
              </div>
            </div>
            `;
            divfutur1.appendChild(infoAte);
          });
        })
      .catch(error => console.log(error));
    }

})();
