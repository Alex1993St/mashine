<template>
    <v-app id="inspire">
        <v-container fluid grid-list-xl>
            <v-layout wrap align-center>
                <v-flex xs12 sm12 d-flex>
                    <input type="text" name="title" v-model="blog.title" placeholder="Title">
                    <input type="text" name="short_text" v-model="blog.short_text" placeholder="Short text">
                    <input type="text" name="description" v-model="blog.description" placeholder="Description">
                    <select name="status" v-model="blog.status" placeholder="status">
                        <option value="0">Not Active</option>
                        <option value="1">Active</option>
                    </select>
                    <input type="file" name="img" @change="update" ref="upload" placeholder="Image">
                    <button class="btn btn-success" @click="submit">Send</button>
                </v-flex>
            </v-layout>
        </v-container>
    </v-app>
</template>

<script>
    import UploadButton from 'vuetify-upload-button';

    export default {
        name: "AddBlogComponent",
        data() {
            return {
              blog: {},
              status:[
                  {text: 'active', value: '1'},
                  {text: 'not active', value: '0'}
              ]
            }
        },

        components: {
            'upload-btn': UploadButton
        },

        methods:{
            submit(){
               let vm = this;vm.$validator.validateAll().then(valid => {
                    const config = { 'content-type': 'multipart/form-data' };
                    const formData = new FormData();
                    formData.append('title', this.blog.title);
                    formData.append('short_text', this.blog.short_text);
                    formData.append('description', this.blog.description);
                    formData.append('status', this.blog.status);
                    formData.append('img', this.blog.img);
                   if(valid){
                      vm.axios.post('/admin/blog',formData, config
                      ).then(function(data){
                          console.log(data);
                      }).catch(function(err){
                          console.log(err);
                      })
                   }else {
                       console.log('err');
                   }
                })
            },

            update(){
                this.blog.img = this.$refs.upload.files[0];
            },

            clear () {
                this.$refs.form.reset();
                this.blog.title = '';
                this.blog.description = '';
                this.blog.short_text = '';
                this.blog.img = '';
                this.blog.status = '';
            }
        },

    }
</script>

<style scoped>

</style>
