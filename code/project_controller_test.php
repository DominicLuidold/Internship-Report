<?php

[...]

class ProjectControllerTest
{
    // Set up for tests
    
    public function testGetProjects(): void
    {
        $this->makeJsonRequest('GET', '/api/projects');
        $response = \json_decode(self::$client->getResponse()->getContent(), true);
        self::assertSame(Response::HTTP_OK, self::$client->getResponse()->getStatusCode());
        
        self::assertCount(1, $response['_embedded'];
        // Other specific response validation
        $this->validateProjectData($response['_embedded'][0]);
        self::assertSame(5, $this->getNumberOfDbQueries());
    }
    
    [...]
}
