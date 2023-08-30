// curso.service.ts

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';
import { Curso } from './curso';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CursoService {

  url = "http://localhost/api/php/";

  vetor: Curso[] = [];

  constructor(private http: HttpClient) { }

  // obter todos os cursos
  obterCursos(): Observable<Curso[]> {
    return this.http.get(this.url + "listar.php").pipe(map((res) => {
      this.vetor = (res as any)['cursos'];
      return this.vetor;
    }));
  }
}
