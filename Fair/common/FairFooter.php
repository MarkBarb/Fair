<?php

/***********************************************************/
/* FairFooter.php                                          */
/*                                                         */
/* FairFooter should always be included.                   */
/* See template/FairTemplate for usage.                    */
/*                                                         */
/* FairFooter compares CURRENT_PROCESS to TOP_PROCESS      */
/* and closes body and html tags if they match. This       */
/*  assists in serving well formed documents.              */
/*                                                         */
/***********************************************************/

if (strcmp($TOP_PROCESS,$CURRENT_PROCESS) == 0){
echo "</body>";
echo "</html>";
}
