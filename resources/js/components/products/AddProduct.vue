<template>
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title">Create Product</h5> <br>

            <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <Select2 v-model="form.category_id" :options="categories"></Select2>
                    </div>

                    <div class="form-group">
                        <label>Band</label>
                        <Select2 v-model="form.brand_id" :options="brands"></Select2>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: transparent !important;">
                    <button type="submit" class="btn btn-primary">
                        <span> <i class="fa fa-save"></i></span>
                        <span>Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div><!-- /.card -->
</template>

<script>
import store from "../../store";
import * as actions from "../../store/action-types";
import {mapGetters} from "vuex";
import Select2 from 'v-select2-component';

export default {
    components: {Select2},
    data() {
        return {
            form: {
                category_id: 1,
                brand_id: 1
            }
        }
    },
    computed: {
        ...mapGetters({
            'categories': 'getCategories',
            'brands': 'getBrands'
        })
    },
    mounted() {
        //Get Categories
        store.dispatch(actions.GET_CATEGORIES)

        //Get Brands
        store.dispatch(actions.GET_BRANDS)
    }

}
</script>

<style scoped>

</style>
