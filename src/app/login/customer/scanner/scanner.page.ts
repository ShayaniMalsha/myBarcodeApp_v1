import { Component, OnInit } from '@angular/core';
import { BarcodeScanner, BarcodeScannerOptions } from '@ionic-native/barcode-scanner/ngx';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-scanner',
  templateUrl: './scanner.page.html',
  styleUrls: ['./scanner.page.scss'],
})
export class ScannerPage implements OnInit {
  options: BarcodeScannerOptions;
  encodText: string;
  encodedData: any = {};
  scannedData: any = {};

  constructor(public navCtrl: NavController, public scanner: BarcodeScanner) { }

  ngOnInit() {
  }
  scan() {
    this.options = {
      prompt: 'Scan your barcode'
    };
    this.scanner.scan(this.options).then((data) => {
      this.scannedData = data;
    }, (err) => {
      console.log('Error : ' , err);
    });

  }
  encode() {
    this.scanner.encode(this.scanner.Encode.TEXT_TYPE, this.encodText) .then((data) => {
      this.encodedData = data;

    }, (err) => {
      console.log('Error : ' , err);
    });

  }


  }



