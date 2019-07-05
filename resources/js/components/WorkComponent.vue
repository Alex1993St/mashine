<template>
    <v-app id="inspire">
        <div>
            <v-toolbar flat color="white">
                <v-toolbar-title>My CRUD</v-toolbar-title>
                <v-divider
                    class="mx-2"
                    inset
                    vertical
                ></v-divider>
                <v-spacer></v-spacer>
                <v-dialog v-model="dialog" max-width="500px">
                    <template v-slot:activator="{ on }">
                        <v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>
                    </template>
                    <v-card>
                        <v-card-title>
                            <span class="headline">{{ formTitle }}</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12 sm6 md4>
                                        <v-text-field v-model="editedItem.title" label="Title"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md4>
                                        <v-text-field v-model="editedItem.price" label="Price"></v-text-field>
                                    </v-flex>

                                </v-layout>
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
                            <v-btn color="blue darken-1" flat @click="save">Save</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-toolbar>
            <v-data-table
                :headers="headers"
                :items="work_list"
                class="elevation-1"
            >
                <template v-slot:items="props">
                    <td>{{ props.item.id }}</td>
                    <td class="text-xs-right">{{ props.item.title }}</td>
                    <td class="text-xs-right">{{ props.item.price }}</td>
                    <td class="justify-center layout px-0">
                        <v-icon
                            small
                            class="mr-2"
                            @click="editItem(props.item)"
                        >
                            edit
                        </v-icon>
                        <v-icon
                            small
                            @click="deleteItem(props.item)"
                        >
                            delete
                        </v-icon>
                    </td>
                </template>
                <template v-slot:no-data>
                    <v-btn color="primary" @click="getWork()">Reset</v-btn>
                </template>
            </v-data-table>
        </div>
    </v-app>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        name: "WorkComponent",
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'id',
                    align: 'left',
                    sortable: false,
                    value: 'id'
                },
                { text: 'title', value: 'title' },
                { text: 'price', value: 'price' },
                { text: 'Actions', value: 'name', sortable: false }
            ],
           // desserts: [],
            editedIndex: -1,
            editedItem: {
                title: '',
                price: 0
            },
            // defaultItem: {
            //     title: '',
            //     price: 0
            // }
        }),

        computed: {
            formTitle () {
                return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
            },

            work_list(){
                return this.$store.getters.WORKS
            }
        },

        watch: {
            dialog (val) {
                val || this.close()
            }
        },

        created () {
            this.getWork();
        },

        methods: {
            ...mapActions(['PUSH_WORK', 'EDIT_WORK', 'REMOVE_WORK']),

            getWork(){
               return this.$store.dispatch('GET_WORK');
            },


            editItem (item) {
                 this.editedIndex = 0;
                 this.editedItem = Object.assign({}, item)
                 this.dialog = true
            },

            deleteItem (item) {
                //const index = this.desserts.indexOf(item)
                //confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
                if(confirm('Are you sure you want to delete this item?')){
                    this.REMOVE_WORK(item.id);
                }
            },

            close () {
                this.dialog = false
                setTimeout(() => {
                    //this.editedItem = Object.assign({}, this.defaultItem)
                    this.editedIndex = -1
                }, 300)
            },

            save () {
                  if (this.editedIndex > -1) {
                     this.EDIT_WORK(this.editedItem);
                 } else {
                     this.PUSH_WORK(this.editedItem);
                 }
                this.close()
            }
        }
    }
</script>

<style scoped>

</style>
