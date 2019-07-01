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
                <router-link to="/add_blog">
                    <v-btn color="primary" dark class="mb-2">New Item</v-btn>
                </router-link>
            </v-toolbar>
            <v-data-table
                :headers="headers"
                :items="desserts"
                class="elevation-1"
            >
                <template v-slot:items="props">
                    <td>{{ props.item.name }}</td>
                    <td class="text-xs-right">{{ props.item.title }}</td>
                    <td class="text-xs-right">{{ props.item.short_text }}</td>
                    <td class="text-xs-right">{{ props.item.img }}</td>
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
                    <v-btn color="primary" @click="initialize">Reset</v-btn>
                </template>
            </v-data-table>
        </div>
    </v-app>
</template>

<script>
    export default {
        name: "Blog",
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'title',
                    align: 'left',
                    sortable: false,
                    value: 'title'
                },
                { text: 'Short tex', value: 'short_text' },
                { text: 'Image', value: 'img' },
                { text: 'Actions', value: 'name', sortable: false }
            ],
            desserts: [],
            editedIndex: -1,
            editedItem: {
                title: '',
                short_text: 0,
                img: 0,
            },
            defaultItem: {
                title: '',
                short_text: 0,
                img: 0,
            }
        }),

        computed: {
            formTitle () {
                return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
            }
        },

        watch: {
            dialog (val) {
                val || this.close()
            }
        },

        created () {
            this.initialize()
        },

        methods: {
            initialize () {
                this.desserts = [

                ]
            },

            editItem (item) {
                this.editedIndex = this.desserts.indexOf(item)
                this.editedItem = Object.assign({}, item)
                this.dialog = true
            },

            deleteItem (item) {
                const index = this.desserts.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
            },

            close () {
                this.dialog = false
                setTimeout(() => {
                    this.editedItem = Object.assign({}, this.defaultItem)
                    this.editedIndex = -1
                }, 300)
            },

            save () {
                if (this.editedIndex > -1) {
                    Object.assign(this.desserts[this.editedIndex], this.editedItem)
                } else {
                    this.desserts.push(this.editedItem)
                }
                this.close()
            }
        }
    }
</script>

<style scoped>
    .container{
        width: 100%!important;
    }

    .application--wrap{
        min-height: 0px!important;
    }
</style>
