import * as actions from "../../action-types"
import Axios from "axios";

export default {
    [actions.ADD_PRODUCT]({ commit } , payload){
        Axios.post('/dashboard/products' , payload)
            .then(res =>{

            })
            .catch(error =>{

            })
    }
}
