import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListarClientesComponent } from './clientes/listar-clientes/listar-clientes.component';
import { ListarProductosComponent } from './productos/listar-productos/listar-productos.component';

const routes: Routes = [
  {
    path:"clientes",component:ListarClientesComponent
  },
  {
    path:"productos",component:ListarProductosComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
