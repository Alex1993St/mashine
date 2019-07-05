<template>
    <div>
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
                <button class="btn btn-primary btn-modify" @click="send()">Отправить</button>
            </div>
        </div>
        <div v-if="success" class="d-flex col-md-12">
            <div class="alert alert-success" role="alert">
                {{ alert_mess }}
            </div>
        </div>
        <div v-if="wrong"  class="d-flex col-md-12">
            <div class="alert alert-danger" role="alert">
                {{ alert_mess }}
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'Contact',

        data() {
            return {
                name: '',
                email: '',
                message: '',
                success: false,
                wrong: false,
                alert_mess: '',
            }
        },

        methods: {
            send(){
                let vm = this;
                vm.$validator.validateAll().then(valid => {
                    if (valid) {
                        vm.axios.post('/create', {
                            name: vm.name,
                            email: vm.email,
                            message: vm.message
                        }).then(function(data){
                            vm.name = '';
                            vm.email = '';
                            vm.message = '';
                            vm.success=  true;
                            vm.alert_mess = data.data
                        }).catch(function(err){
                            vm.wrong= true;
                            vm.alert_mess = err.data
                        })
                    }else{
                       console.log("error");
                    }
                });

            }
        }


    }
</script>
