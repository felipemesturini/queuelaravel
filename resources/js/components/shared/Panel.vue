<template>
    <div class="painel">
        <h2 class="painel-titulo" @dblclick="showPanel = !showPanel">{{ titulo }}</h2>
        <div class="painel-conteudo" v-show="showPanel">
            <slot ></slot>
            <slot name="footer"></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "Panel.vue",
    data() {
        return {
            showPanel: true
        }
    },
    props: {
        titulo: String,
    }
}
</script>

<style scoped>
    .painel {
        padding: 2px;
        border: solid 2px grey;
        display: inline-block;
        margin: 5px;
        box-shadow: 5px 5px 10px grey;
        width: 200px;
        height: 100%;
        vertical-align: top;
        text-align: center;
    }

    .painel .painel-titulo {
        text-align: center;
        border: solid 2px;
        background: lightblue;
        margin: 0 0 15px 0;
        padding: 10px;
        text-transform: uppercase;
    }
    .painel-conteudo {
        overflow: hidden;
    }
</style>

<style>
    p {
        font-size: 18pt;
    }
</style>
