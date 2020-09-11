<template>
  <div>
    <b-form class="my-3 mx-2">
      <b-form-input class="text-center" type="text" placeholder="Buscar contacto ..."></b-form-input>
    </b-form>
    <b-list-group>
      <contact-component 
      v-for="conversation in conversations" 
      :key="conversation.id"
      :id = "conversation.id"
      :conversation="conversation"
      @click.native="selectConversation(conversation);"
      @mouseover.native="mouseDentro(conversation.id)"
      @mouseleave.native="mouseFuera(conversation.id)"
      ></contact-component>
    </b-list-group>
  </div>
</template>
<script>
export default {
  data() {
    return {
      conversations: [],
    };
  },
  mounted() {
    this.getConversations();
  },
  methods:{
    getConversations(){
      axios.get('/api/conversations')
      .then((Response) => {
        this.conversations = Response.data;
      });
    },
    selectConversation(conversation){
      console.log("Hola mundo");
    },
    mouseDentro(id){
      document.getElementById(id).style.background = "#c6c8ca";
    },
    mouseFuera(id){
      var elemento = document.getElementById(id); 
      elemento.style.removeProperty('background'); 

    }

  }
};
</script>
