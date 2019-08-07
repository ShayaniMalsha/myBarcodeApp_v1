import { TestBed } from '@angular/core/testing';

import { PostProvidersService } from './post-providers.service';

describe('PostProvidersService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: PostProvidersService = TestBed.get(PostProvidersService);
    expect(service).toBeTruthy();
  });
});
