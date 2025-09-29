fetch("http://localhost/api/search.php")
  .then(response => response.json())
  .then(data => {
    data.forEach(item => {
      console.log(data)
    });
  })
  .catch(error => console.error("Error fetching ZIP files:", error));