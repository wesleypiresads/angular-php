import { TestBed } from '@angular/core/testing';

import { NoticiaService } from './noticia.service';

describe('NoticiaService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: NoticiaService = TestBed.get(NoticiaService);
    expect(service).toBeTruthy();
  });
});
