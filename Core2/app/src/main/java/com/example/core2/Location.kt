package com.example.core2
import android.os.Parcelable
import kotlinx.parcelize.Parcelize

@Parcelize
data class Location(var name: String,
                    val city: String,
                    val date: String,
                    val rating: Double,
                    val imageIdentifier: Int): Parcelable {
}