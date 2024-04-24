const type = document.getElementById("type");
const secteur = document.getElementById("secteur");
const salaire_min = document.getElementById("salaire_min");
const salaire_max = document.getElementById("salaire_max");
const job_location = document.getElementById("location");
const marque = document.getElementById("marque");

const marque_filter = document.getElementById("btn-filter");

marque_filter.addEventListener("click", function () {
  let query = "?";
  let query_arr = [];

  const marque_value = marque.value.trim();
  if (marque_value) query_arr.push(`marque_id=${marque_value}`);

  const salaire_min_value = salaire_min.value.trim();
  if (salaire_min_value) query_arr.push(`salaire_min=${salaire_min_value}`);

  const salaire_max_value = salaire_max.value.trim();
  if (salaire_max_value) query_arr.push(`salaire_max=${salaire_max_value}`);

  const location_value = job_location.value.trim();
  if (location_value) query_arr.push(`location=${location_value}`);

  const type_value = type.value.trim();
  if (type_value) query_arr.push(`type=${type_value}`);

  const secteur_value = secteur.value.trim();
  if (secteur_value) query_arr.push(`secteur=${secteur_value}`);

  if (query_arr.length > 0) {
    query = `${query}&${query_arr.join("&")}`;
    window.location.href = `/nos-offres${query}`;
  } else {
    window.location.href = `/nos-offres`;
  }
});
