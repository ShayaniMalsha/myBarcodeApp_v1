import { Component, OnInit } from '@angular/core';
import {Http} from '@angular/http';





@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.scss'],
})
export class PostComponent  {


  // tslint:disable-next-line: deprecation
  constructor(http: Http) {
    // tslint:disable-next-line: no-unused-expression
    http.get('http://localhost/web/post.php')
    .subscribe(response => {
      console.log(response);
    });
    // tslint:disable-next-line: deprecation

  }



  // tslint:disable-next-line: use-lifecycle-interface
  ngOnInit() {}

}
