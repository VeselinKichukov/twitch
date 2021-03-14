<template>
    <div>
        <div class="flex flex-col lg:flex-row items-center">
            <b-input-group class="mb-3" prepend="Search using RAWG">
                <b-form-input v-model="input_rawg"></b-form-input>
                <b-input-group-append>
                    <b-button @click="searchRawg('rawg')" size="sm" text="Button" variant="success">Search</b-button>
                </b-input-group-append>
            </b-input-group>

            <b-input-group class="mb-3 ml-5" prepend="Search using IGDB">
                <b-form-input v-model="input_igdb"></b-form-input>
                <b-input-group-append>
                    <b-button @click="searchIgdb('igdb')" size="sm" text="Button" variant="success">Search</b-button>
                </b-input-group-append>
            </b-input-group>
        </div>

        <div>
            <b-table
                v-if="data.games"
                striped hover
                :dark="true"
                :items="data.games"
                :fields="fields"
                :per-page="perPage"
                :current-page="currentPage"
            >
                <template v-slot:cell(name)="row">
                    <div>
                        <p>{{row.item.name}}</p>
                    </div>
                </template>

                <template v-slot:cell(released)="row">
                    <div>
                        <p>{{row.item.released}}</p>
                    </div>
                </template>

                <template v-slot:cell(image)="row">
                    <div>
                        <a href="#">
                            <img :src="row.item.background_image" alt="game cover" width="193" height="130" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                </template>

                <template v-if="!checkUrl()" v-slot:cell(favourite)="row">
                    <div>
                        <b-button variant="success" @click="addToFavourites(row)"> Add to My Collection
                        </b-button>
                    </div>
                </template>

            </b-table>
        </div>
        <b-pagination
            v-if="data.games"
            v-model="currentPage"
            :total-rows="rows"
            :per-page="perPage"
            aria-controls="my-table"
        >
            <p class="mt-3">Current Page: {{ currentPage }}</p>

        </b-pagination>

    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                input_rawg: '',
                input_igdb: '',
                perPage: 10,
                currentPage: 1,
                fields: [
                    'Name',
                    'Released',
                    'Image',
                    !this.checkUrl() ? 'Favourite' : '' ,

                ],
            };
        },
        props: {
            data: ''
        },
        mounted: function () {
        },
        computed: {
            rows() {
                if (this.data.games){
                    return this.data.games.length
                }
            }
        },
        methods: {
            checkUrl() {
               return window.location.href.indexOf("my_games") > -1

            },
            searchRawg(client) {
                this.$inertia.get('/rawg_games', {name: this.input_rawg, client: client} )

            },
            searchIgdb(client) {
                this.$inertia.get('/igdb_games', {name: this.input_igdb, client: client} )

            },
            addToFavourites(game) {
                // this.$inertia.visit('/favourites', {game: game} );
                this.$inertia.post('/favourites', {game: game} );
                // axios.post('/favourites', {game: game})
            },
        }
    }
</script>
<style scoped>
</style>
