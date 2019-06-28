<template>
    <form class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Имя" v-model="name" name="name" v-validate="'alpha|required'" data-vv-as="Имя">
                <span>{{ errors.first('name') }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" v-model="email" name="email" v-validate="'email|required'" data-vv-as="Email">
                <span>{{ errors.first('email') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" v-model="message" class="form-control" id="" cols="30" rows="7" placeholder="Сообщение" v-validate="'required'" data-vv-as="Сообщение"></textarea>
                <span>{{ errors.first('message') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input value="Send Message" class="btn btn-primary btn-modify" @click="send()">
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: 'Contact',

        data() {
            return {
                name: '',
                email: '',
                message: '',

            }
        },

        methods: {
            send(){
                this.$validator.validateAll().then(valid => {
                    if (valid) {
                        //axios
                    }else{
                       console.log("error");
                       //need create component modal error
                    }
                });

            }
        }


    }
</script>
