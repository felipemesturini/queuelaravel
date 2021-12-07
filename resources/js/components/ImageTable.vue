<template>
    <b-table striped hover :items="items"></b-table>
</template>

<script>
    export default {
        name: "ImageTable.vue"
        , data() {
            return {
                items: []
            }
        }
        , created() {
            this.$http.get('api/photo')
                .then(res => res.json())
                .then(dados => {
                    console.log(dados);
                    this.items = dados;
                }, err => console.log(err));
        }
    }
</script>

<style scoped>

</style>
