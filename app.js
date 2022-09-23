
const app = new Vue({
  el: '#app',
  data: {
    title: 'hello',
    dischi: [],
  },
  methods: {
    fetchDischi() {
      axios
        .get('https://flynn.boolean.careers/exercises/api/array/music')
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