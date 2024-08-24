[votelist]
                              <!-- Voting question start -->
                              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="left"><strong>{title}</strong></td>
                                </tr>
                              </table>
                              <!-- Voting question end -->
                              <br />
                              <!-- Voting answers start -->
                              <form method="post" name="vote" action=''>{list}
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top: 10px;"> 
                                  <tr>
                                    <td align="center">
										<input type="hidden" name="vote_action" value="vote" />
										<input type="hidden" name="vote_id" id="vote_id" value="1" />
										<input type="submit" onclick="doVote('vote'); return false;" style="font-size: 11px;" value="Голосовать" />
									</td>
                                    <td align="center">
										<input type="hidden" name="vote_action" value="results" />
										<input type="hidden" name="vote_id" value="1" />
										<input type="submit" onclick="doVote('results'); return false;" style="font-size: 11px;" value="Результаты" />
									</td>
                                  </tr>
                                </table>
                              </form>
                              <!-- Voting results end -->
[/votelist]
[voteresult]
                              <!-- Voting question start -->
                              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="left"><strong>{title}</strong></td>
                                </tr>
                              </table>
                              <!-- Voting question end -->
                              <br />
                              <!-- Voting answers start -->
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">{list}
                              </table>
                              <!-- Voting answers end -->
                              <!-- Summary start -->
                              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="left"><br /><strong>Всего проголосовало:</strong> {votes}</td>
                                </tr>
                              </table>
                              <!-- Summary end -->
[/voteresult]