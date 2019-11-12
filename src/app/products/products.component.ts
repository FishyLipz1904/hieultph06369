import { Component, OnInit } from '@angular/core';
import { ProductData} from '../MockData';
import { Product } from '../Product';
@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  products = ProductData;
  selectedProduct: Product;


  deleteProduct(id){
    console.log(id);
    
    console.log(this.products = this.products.filter(item => item.id!= id))
  }
  detailProduct(product){
    this.selectedProduct = product;
  }
}
