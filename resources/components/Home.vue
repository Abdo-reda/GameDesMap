
<template>
    <p> =============== Home ================ </p>
    <d3-network ref='net' :net-nodes="nodes" :net-links="links" :options="options" />
</template>

<script>
export default {
    data () {
    return {
      nodes: [
        { id: 1, name: 'my awesome node 1'},
        { id: 2, name: 'my node 2'},
        { id: 3, name:'orange node', _color: 'orange' },
        { id: 4, _color: '#4466ff'},
        { id: 5 },
        { id: 6 },
        { id: 7 },
        { id: 8 },
        { id: 9 }
      ],
      links: [
        { sid: 1, tid: 2, _color: 'orange' },
        { sid: 2, tid: 8, _color: 'orange' },
        { sid: 3, tid: 4, _color: 'orange' },
        { sid: 4, tid: 5, _color: 'orange' },
        { sid: 5, tid: 6, _color: 'orange' },
        { sid: 7, tid: 8, _color: 'orange' },
        { sid: 5, tid: 8, _color: 'orange' },
        { sid: 3, tid: 8, _color: 'orange' },
        { sid: 7, tid: 9, _color: 'orange' }
      ],
      nodeSize: 20,
      canvas: false
    }
  },
  computed:{
    options(){
      return{
        force: 3000,
        size: {w:600, h:600},
        nodeSize: this.nodeSize,
        nodeLabels: true,
        linkLabels:true,
        canvas: this.canvas
      }
    }
  }
};
</script>