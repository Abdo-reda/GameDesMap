const API = 'api';
const MAP = 'map';
const card = 'card';
export default {
    //--------------- Map End Points
        //show, index, update, delete
    async getMap(id){
        return await fetch(`${API}/${MAP}/${id}`);
    },

    async listMaps(){
        let res = await fetch(`${API}/${MAP}`);
        return res.json();
    }
}