import { Component, OnInit } from '@angular/core';
import { Subject } from 'rxjs';

import { ClientesService } from '../clientes.service';

@Component({
  selector: 'app-listar-clientes',
  templateUrl: './listar-clientes.component.html',
  styleUrls: ['./listar-clientes.component.css']
})
export class ListarClientesComponent implements OnInit {

  dtOptions: DataTables.Settings = {};
  dtTrigger: Subject<any> = new Subject<any>();

  txtValor:String="";

  clientes: any[] = [];

  constructor(private service:ClientesService) { }
/*
  addCliente()
  {
    this.clientes.push({tipo:"Persona", numero_documento:"12345678", nombres:"Fernando"});

  }

  removeCliente()
  {
    this.clientes.splice(this.clientes.length-1,1);
    
  }
*/

  ngOnInit(): void {

    this.dtOptions = {
      pagingType: 'full_numbers',
      pageLength: 10
    };

    //this.clientes=[{tipo:"Persona", numero_documento:"12345678", nombres:"Fernando"}];
    this.service.getclientes().subscribe((Response)=>{
      
    })
    this.dtTrigger.next(null);

  }

}
