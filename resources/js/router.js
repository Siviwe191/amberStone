import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/login.vue';
import Products from './components/modules/product/products.vue';
import ProductEdit from './components/modules/product/edit.vue';
import ProductCreate from './components/modules/product/create.vue';
import Suppliers from './components/modules/supplier/suppliers.vue';
import SupplierEdit from './components/modules/supplier/edit.vue';
import SupplierCreate from './components/modules/supplier/create.vue';
import Distributers from './components/modules/distributor/distributers.vue';
import DistributerEdit from './components/modules/distributor/edit.vue';
import DistributerCreate from './components/modules/distributor/create.vue';
import PurchaseOrders  from './components/modules/purchaseOrder/purchaseOrders.vue';
import PurchaseOrderEdit from './components/modules/purchaseOrder/edit.vue';
import PurchaseOrderCreate from './components/modules/purchaseOrder/create.vue';



const routes = [
    { path: '/', component: Login },
    { path: '/products', component: Products },
    { path: '/productEdit', component: ProductEdit },
    { path: '/productCreate', component: ProductCreate },
    { path: '/suppliers', component: Suppliers },
    { path: '/supplierEdit', component: SupplierEdit },
    { path: '/supplierCreate', component: SupplierCreate },
    { path: '/distributers', component: Distributers },
    { path: '/distributerEdit', component: DistributerEdit },
    { path: '/distributerCreate', component: DistributerCreate },
    { path: '/purchaseOrders', component: PurchaseOrders },
    {path: '/purchaseOrderEdit', component: PurchaseOrderEdit },
    {path: '/purchaseOrderCreate', component: PurchaseOrderCreate },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
