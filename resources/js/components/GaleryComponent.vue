<template>
    <div class="corpo">
        <h2 class="centralizado">Galeria de images</h2>
        <input type="search" class="filter" v-on:input="filterText = $event.target.value"
               placeholder="Informe a pesquisa" />
        <ul class="lista" v-custom >
            <li class="item-lista" v-for="bird of filteredBirds">
                <galery-item class="thumbnail" :name="bird.name" :url="bird.image" :alt="bird.alt"></galery-item>
            </li>
        </ul>
    </div>
</template>

<script>
    import GaleryItem from "./GaleryItem";

    export default {
        name: "GaleryComponent.vue",
        components: {
            GaleryItem,
        },
        data() {
            return {
                birds: [],
                filterText: ""
            }
        },
        computed: {
            firstPerson: function () {
                let person = this.birds.first;
                console.log('firstPerson');
                return 'teste ' + this.filterText;
            },
            lastPersion: function () {
                let person = this.birds[this.birds.length - 1];
                console.log('lastPersion');
                return person.name;
            },
            filteredBirds() {
                console.log('filteredBirds');
                if (this.filterText) {
                    let regEx = new RegExp(this.filterText.trim(), 'i');
                    return this.birds.filter(bird => regEx.test(bird.name));
                }
                else {
                    return this.birds;
                }
            }
        },
        methods: {
            personToString: function (index) {
                return this.birds[index].name + ' - ' + this.birds[index].age
            }
        },
        watch: {

        },
        created() {
            this.$http.get('api/photo')
                .then(res => res.json())
                .then(dados => this.birds = dados, err => console.log(err));
        }
        , directives: {
            custom: {
                bind: function(el){
                    console.log('Directovie is call')
                }
            }
        }
    }
</script>

<style scoped>
    .corpo {
        font-family: Arial Helvetica sans-serif;
        width: 90%;
        margin: 0 auto;
    }

    .centralizado {
        text-align: center;
    }

    .lista {
        list-style: none;
    }

    ul .item-lista {
        display: inline-block;
    }

    .filter {
        display: inline-block;
        width: 90%;
    }
</style>
