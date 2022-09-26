
const app = new Vue({
  el: '#app',
  data: {
    dischi: [],
    onSearch: '',
  },
  methods: {
    fetchDischi() {
      axios
        .get('http://localhost/ex%20n44%20PHP%20API%20DISCHI/php-ajax-dischi/api/dischi.php')
        .then((res) => {
          const { response } = res.data
          this.dischi = response
        })
    },
  },
  created() {
    this.fetchDischi()
  },
})