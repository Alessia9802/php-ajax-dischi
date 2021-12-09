const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  mounted() {
    axios
      .get("./assets/api/albums.php")
      .then((response) => {
        console.log(response.data);

        this.albums = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
});
