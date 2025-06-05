import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { API_ENDPOINTS } from '../constants/api.constants';

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
this.http.get<any[]>(API_ENDPOINTS._LISTAR_LIBROS_).subscribe(
      (data) => {
        this.libros = data;
        console.log('Libros obtenidos:', this.libros);
      },
      (error) => {
        console.error('Error al obtener los libros:', error);
      }
    );
    }

}
