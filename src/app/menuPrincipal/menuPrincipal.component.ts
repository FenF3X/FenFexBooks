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

  opciones:any[] = [];
  
  constructor(private http:HttpClient) { }

  ngOnInit(): void {
this.http.get<any[]>(API_ENDPOINTS._VER_MENU_).subscribe(
      (data) => {
        this.opciones = data;
        console.log('Opciones:', this.opciones);
      },
      (error) => {
        console.error('Error al obtener los libros:', error);
      }
    );
    }

}
