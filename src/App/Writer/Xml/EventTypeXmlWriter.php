<?php

declare(strict_types=1);

namespace App\Writer\Xml;

final class EventTypeXmlWriter extends AbstractXmlWriter
{
    public function addMultiBeginSelector(): void
    {
        $this->appendDataToFile('<eventTypes>');
    }

    public function addSingleSelector(array $data): void
    {
        $eventTypeData = '<eventType>';
        $eventTypeData .= $this->arrayToXMLConverter->convert($data);
        $eventTypeData .= '</eventType>';

        $this->appendDataToFile($eventTypeData);
    }

    public function addMultiEndSelector(): void
    {
        $this->appendDataToFile('</eventTypes>');
    }
}
