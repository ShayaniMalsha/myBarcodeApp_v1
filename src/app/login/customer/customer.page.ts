import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-customer',
  templateUrl: './customer.page.html',
  styleUrls: ['./customer.page.scss'],
})
export class CustomerPage implements OnInit {
  customerid: string;
  devicetype: string;
  model: string;
  purchasedate: string;
  warrentyperiod: string;
  serialnumber: string;
  productline: string;
  deviceimage: string;
  invoiceimage: string;

  constructor() { }

  ngOnInit() {
  }
  save() {
    console.log('CustomerId:' + this.customerid);
    console.log('DeviceType:' + this.devicetype);
    console.log('Model:' + this.model);
    console.log('PurchaseDate:' + this.purchasedate);
    console.log('WarrentyPeriod:' + this.warrentyperiod);
    console.log('SerialNumber:' + this.serialnumber);
    console.log('ProductLine:' + this.productline);
    console.log('DeviceImage:' + this.deviceimage);
    console.log('InvoiceImage:' + this.invoiceimage);




  }

}
