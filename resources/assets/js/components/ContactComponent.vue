<template>
  <b-list-group-item :variant="variant" width="80%">
    <b-row class="p-2" align-h="center">
      <b-col cols="12" md="2" class="text-center pr-0 pl-0">
        <b-img
          rounded="circle"
          blank
          width="60"
          height="60"
          blank-color="black"
          alt="img"
          class="m-1"
        ></b-img>
      </b-col>
      <b-col cols="8" align-self="center" class="d-none d-md-block pl-0 pr-0">
        <p class="mb-1">{{ conversation.contact_name }}</p>
        <p class="text-muted small mb-1">{{ conversation.last_message }}</p>
      </b-col>
      <b-col cols="2" class="d-none d-md-block pl-0 pr-0">
        <p class="text-muted small">{{ conversation.last_time }}</p>
      </b-col>
    </b-row>
  </b-list-group-item>
</template>

<script>
export default {
  props:{
    variant: String,
    conversation: Object
  },
  data(){
    return{
    };
  },
  mounted() {
  },
};
</script>
