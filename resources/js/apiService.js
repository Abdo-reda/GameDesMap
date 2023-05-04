const API = 'api';
const MAP = 'map';
const card = 'card';
let putOptions = {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ })
};

export default {
    //--------------- Map End Points
        //show, index, update, delete, store?
    async getMap(id){
        return await fetch(`${API}/${MAP}/${id}`);
    },

    async listMaps(){
        let res = await fetch(`${API}/${MAP}`);
        return res.json();
    },

    async updateMap(id, payload){
        putOptions.body = JSON.stringify(payload);
        let res = await fetch(`${API}/${MAP}/${id}`, putOptions);
        return res.json();
    }
}