<template>
  <b-row class="h-100">
    <b-col cols="9">
      <b-card
        footer-bg-variant="light"
        footer-border-variant="dark"
        title="Conversación activa"
        class="h-100"
      >
        <message-conversation-component
          v-for="message in messages"
          :key="message.id"
          :written-by-me="message.written_by_me"
          >{{ message.content }}</message-conversation-component
        >

        <div slot="footer">
          <b-form class="mb-0" @submit.prevent="postMessage()" autocomplete="off">
            <b-input-group>
              <b-form-input
                class="text-center"
                v-model="newMessage"
                type="text"
                placeholder="Escribe un mensaje ..."
              ></b-form-input>
              <b-input-group-append>
                <b-button type="submit" variant="primary">Enviar</b-button>
              </b-input-group-append>
            </b-input-group>
          </b-form>
        </div>
      </b-card>
    </b-col>
    <b-col cols="3" class="pl-0">
      <b-img
        rounded="circle"
        blank
        width="60"
        height="60"
        blank-color="black"
        alt="img"
        class="m-1"
      ></b-img>
      <p>Usuario seleccionado</p>
      <hr />
      <b-form-checkbox>Desactivar notificaciones</b-form-checkbox>
    </b-col>
  </b-row>
</template>
<script>
export default {
  data() {
    return {
      messages: [],
      newMessage: "",
      contactId: 2
    };
  },
  mounted() {
    this.getMessages();
  },
  methods: {
    getMessages() {
      axios.get(`/api/messages?contact_id=${this.contactId}`).then((Response) => {
        this.messages = Response.data;
      });
    },
    postMessage() {
      const params = {
        to_id: 2,
        content: this.newMessage,
      };
      axios.post("/api/messages", params).then((Response) => {
        if (Response.data.success) {
          this.newMessage = "";
          this.getMessages();
        }
      });
    },
  },
};
</script>
