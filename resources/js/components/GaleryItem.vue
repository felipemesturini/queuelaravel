<template>
    <panel-component :titulo="name">
        <div>
            <img v-rotate.reverse="{angle: 45}" class="thumbnail" v-bind:src="this.url" :alt="this.alt"/>
            <h4>Detalhes do passaro</h4>
            <p>Nome: {{ name }}</p>
        </div>
        <div slot="footer">
            <h5>Alt: {{ this.alt }}</h5>
        </div>
    </panel-component>
</template>

<script>
    export default {
        name: "GaleryItem.Vue",

        data() {
            return {}
        },
        props: {
            url: String,
            alt: String,
            name: String,
        }
    }
</script>

<style scoped>
    .thumbnail {
        width: 95%;
        height: 95%;
        aspect-ratio: auto;
    }
</style>
