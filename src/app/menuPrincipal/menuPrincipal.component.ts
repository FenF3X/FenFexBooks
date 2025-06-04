import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-menu-principal',
  standalone: false,
  templateUrl: './menuPrincipal.component.html',
  styleUrl: './menuPrincipal.component.scss'
})
export class MenuPrincipalComponent implements OnInit {

  libros:any[] = [];
  
  constructor(private http:HttpClient) { }

  ngOnInit(): void {
     this.http.get<any[]>('http://localhost:3000/datos')
      .subscribe(data => {
        this.libros = data;
      }, error => {
        console.error('Error al obtener los libros:', error);
      });
    }

}
