<?php

[...]

final class UpdateRegionCommandHandler
{
    // Dependency injection of Doctrine repository, etc.
    
    public function __invoke(UpdateRegionCommand $command): RegionResponse
    {
        $region = $this->repo->findById($command->getId());
        if (!$region) {
            throw new HttpNotFoundException();
        }
        
        $region->update($command->getRegulations());
        $this->repo->saveEntity($region);
        
        return new RegionResponse($region);
    }
}
