package hume.app.as2;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.TextView;

/**
 * Created by leejunghun on 2017-10-02.
 */

public class Splash extends Activity {
    final Activity s=this;
    @Override
    public void onCreate(Bundle b){
        super.onCreate(b);
        setContentView(R.layout.splash);

        TextView tv=(TextView)findViewById(R.id.tv);
        TextView tv1=(TextView)findViewById(R.id.tv1);
        Typeface tf=Typeface.createFromAsset(getAssets(),"fonts/NanumBarunpenB.ttf");
        tv.setTypeface(tf);
        tv1.setTypeface(tf);

        Animation fadein;
        fadein= AnimationUtils.loadAnimation(this,R.anim.fadein);
        tv.setAnimation(fadein);
        h.sendEmptyMessageDelayed(0,2000);
    }

    Handler h=new Handler(){
        public void handleMessage(Message msg){
            Intent intent=new Intent(s,MainActivity.class);
            startActivity(intent);
            finish();
        }
    };
}
