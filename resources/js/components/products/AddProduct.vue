<template>
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title">Create Product</h5> <br>

            <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Category <span class="text-danger">*</span></label>
                        <Select2 v-model="form.category_id" :options="categories"></Select2>
                    </div>

                    <div class="form-group">
                        <label>Band <span class="text-danger">*</span></label>
                        <Select2 v-model="form.brand_id" :options="brands"></Select2>
                    </div>


                    <div class="form-group">
                        <label>SKU <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.sku" class="form-control" placeholder="SKU">
                    </div>


                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.name" class="form-control" placeholder="Product Name">
                    </div>

                    <div class="form-group">
                        <label>Image <span class="text-danger">*</span></label>
                        <input type="file" v-on:change="form.image" class="form-control" placeholder="Product Image">
                    </div>

                    <div class="form-group">
                        <label>Cost Price ($) <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.cost_price" class="form-control" placeholder="Product cost price">
                    </div>


                    <div class="form-group">
                        <label>Retail Price ($) <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.retail_price" class="form-control" placeholder="Product retail price">
                    </div>

                    <div class="form-group">
                        <label>Year (EX: 2021) <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.year" class="form-control" placeholder="Product year">
                    </div>


                    <div class="form-group">
                        <label>Description <span class="text-danger">*</span></label>
                        <input type="text" v-model="form.description" class="form-control" placeholder="Product description [Max: 200]">
                    </div>


                    <div class="form-group">
                        <label>Status <span class="text-danger">*</span></label>
                        <select class="form-control" v-model="form.status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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
                brand_id: 1,
                sku: '',
                name: '',
                image: '',
                cost_price: 0,
                retail_price: 0,
                year: '',
                description: '',
                status: 1
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
