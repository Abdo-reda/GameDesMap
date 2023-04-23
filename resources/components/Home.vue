
<template>
    <p> =============== Home ================ </p>
      
    <d3-network 
      ref='net' 
      :net-nodes="nodes" 
      :net-links="links" 
      :options="options"
      :nodeSym="nodeSym"
    />
    
</template>

<script>
import tempSVG from '../assets/svgs/android.svg';

export default {
    data () {
    return {
      nodes: [
        { id: 1, name: 'A0' },
        { id: 2, name: 'A1' },
        { id: 3, name: 'A2' },
        { id: 4, name: 'A3' },
        { id: 5, name: 'A4' },
        { id: 6, name: 'A5' },
        { id: 7, name: 'A6' },
        { id: 8, name: 'A7' },
        { id: 9, name: 'A8' }
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
      nodeSize: 32,
      canvas: false,
      nodeSym: tempSVG,
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
  },
  methods: {
    getSVGSymbol(node) {
      return node.svgSym ? `<svg>${node.svgSym}</svg>` : '';
    }
  }
};
</script>