import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class NoticiaService {

	URL = "http://localhost/api/";

  	constructor(private http: HttpClient) { }

  	exibirNoticias() {
  		return this.http.get(`${this.URL}ExibirNoticias.php`);
  	}

  	inserirNoticia(noticia) {
  		return this.http.post(`${this.URL}InserirNoticia.php`, JSON.stringify(noticia));
  	}

  	excluirNoticia(id: number) {
  		return this.http.get(`${this.URL}ExcluirNoticia.php?id=${id}`);
  	}

  	selecionarNoticia(id: number) {
  		return this.http.get(`${this.URL}SelecionarNoticia.php?id=${id}`);
  	}

  	editarNoticia(noticia) {
  		return this.http.post(`${this.URL}EditarNoticia.php?`, JSON.stringify(noticia));
  	}

}
