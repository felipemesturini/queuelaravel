<template>
    <div>
        <p>Galeria de images</p>
        <ul>
            <li v-for="(person, index) in persons">
                {{ index }} - {{ person.name }}
            </li>
        </ul>
        <p>Primeira Pessoa: {{ firstPerson }}</p>
        <p>Ultima Pessoa: {{ lastPersion }}</p>
        <p>Index 2: {{ personToString(2) }}</p>
    </div>
</template>

<script>
    export default {
        name: "GaleryComponent.vue",

        data() {
            return {
                persons: [
                    {
                        name: 'Ana',
                        age: 122
                    },
                    {
                        name: 'Felipe',
                        age: 22
                    },
                    {
                        name: 'Luis',
                        age: 33
                    }
                ]
            }
        },
        computed: {
            firstPerson: function () {
                let person = this.persons.first;
                console.log(person);
                return this.persons[0].name;
            },
            lastPersion: function () {
                let person = this.persons[this.persons.length - 1];
                return person.name;
            }
        },
        methods: {
            personToString: function (index) {
                return this.persons[index].name + ' - ' + this.persons[index].age
            }
        }
    }
</script>

<style scoped>

</style>
