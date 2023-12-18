<div id="message-success" style="position: fixed;z-index: 9999;background: rgba(0,0,0, .7);width: 100%;height: 100vh;display: none;justify-content: center;align-items: center;font-size: 1em;left:0;top:0;color: #8BEB8C;box-sizing: border-box">
    <div class="success-card" style="border-radius:7px;width: 310px;height:200px;border: 4px solid #49dc4a;display: flex;flex-direction: column;justify-content: center;align-items: center;box-sizing: border-box;background: #ffffff;-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">
        <div id="success" style="box-sizing:border-box;color: #000000;padding: 1em;font-size: 1.5em"><?php echo $lang['CONTACT_SUCCESS'];?></div>
        <button type="button" onclick="document.getElementById('message-success').style.display='none'" style="width: 80%;padding: 0.4em;box-sizing: border-box;border: 2px solid #8BEB8C;background: rgba(139,235,140, .7);font-size: 1.4em"><?php echo $lang['CONTACT_CLOSE'];?></button>
    </div>
</div>

<div id="message-error" style="position: fixed;z-index: 9999;background: rgba(0,0,0, .7);width: 100%;height: 100vh;display: none;justify-content: center;align-items: center;font-size: 1em;left:0;top:0;color: #eb8b8b;box-sizing: border-box">
    <div class="success-card" style="border-radius:7px;width: 310px;height:250px;border: 4px solid #dc4949;display: flex;flex-direction: column;justify-content: center;align-items: center;box-sizing: border-box;background: #ffffff;-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">
        <div id="error" style="box-sizing:border-box;color: #000000;padding: 1em;font-size: 1em;font-weight: bold">&#9940; <?php echo $lang['CONTACT_ERROR'];?></div>
        <div style="box-sizing:border-box;color: #000000;padding: 1em;font-size: 1em;font-weight: bold"> <?php echo $lang['mail'];?></div>
        <div style="box-sizing:border-box;color: #000000;padding: 1em;font-size: 1em;font-weight: bold"><?php echo $lang['CONTACT_ERROR2'];?>.</div>
        <button type="button" onclick="document.getElementById('message-error').style.display='none'" style="width: 80%;padding: 0.4em;box-sizing: border-box;border: 2px solid #eb8b8b;background: rgba(235,139,139,0.7);font-size: 1.4em"><?php echo $lang['CONTACT_CLOSE'];?></button>
    </div>
</div>