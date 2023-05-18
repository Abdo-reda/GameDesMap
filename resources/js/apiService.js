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
let postOptions = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ })
};
let deleteOptions = {
    method: 'DELETE',
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

    async createMap(payload){
        postOptions.body = JSON.stringify(payload);
        let res = await fetch(`${API}/${MAP}`, postOptions);
        return res.json();
    },

    async updateMap(id, payload){
        putOptions.body = JSON.stringify(payload);
        let res = await fetch(`${API}/${MAP}/${id}`, putOptions);
        return res.json();
    },

    async deleteMap(id){
        return await fetch(`${API}/${MAP}/${id}`, deleteOptions);
    },


}